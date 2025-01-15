<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\PublishSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DevelopmentSchemaArn
 * @property string $Version
 * @property string|null $MinorVersion
 * @property string|null $Name
 */
class PublishSchemaRequest extends Request
{
    /**
     * @param array{
     *     DevelopmentSchemaArn: string,
     *     Version: string,
     *     MinorVersion?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
