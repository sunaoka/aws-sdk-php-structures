<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\PublishSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DevelopmentSchemaArn
 * @property string $Version
 * @property string $MinorVersion
 * @property string $Name
 */
class PublishSchemaRequest extends Request
{
    /**
     * @param array{
     *     DevelopmentSchemaArn: string,
     *     Version: string,
     *     MinorVersion?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
