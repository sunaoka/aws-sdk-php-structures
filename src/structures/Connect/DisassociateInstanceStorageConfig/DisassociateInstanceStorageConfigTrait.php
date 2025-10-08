<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateInstanceStorageConfig;

trait DisassociateInstanceStorageConfigTrait
{
    /**
     * @param DisassociateInstanceStorageConfigRequest $args
     * @return void
     */
    public function disassociateInstanceStorageConfig(DisassociateInstanceStorageConfigRequest $args)
    {
        parent::disassociateInstanceStorageConfig($args->toArray());
    }
}
