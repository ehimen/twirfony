<?php
# Generated by protoc-gen-twirp_php , DO NOT EDIT.
# clientcompat.proto

namespace Twirp\Clientcompat;

interface CompatServiceInterface
{
    const SERVICE_NAME = 'twirp.clientcompat.CompatService';

    /**
     * @rpc twirp.clientcompat.CompatService/Method
     * @param Req $req
     * @return Resp
     */
    public function method(Req $req): Resp;

    public function noopMethod(PBEmpty $empty): PBEmpty;

}
