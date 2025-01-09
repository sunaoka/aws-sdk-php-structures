<?php

namespace Sunaoka\Aws\Structures\CloudFormation\SetTypeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TypeArn
 * @property string $Configuration
 * @property string $ConfigurationAlias
 * @property string $TypeName
 * @property 'RESOURCE'|'MODULE'|'HOOK' $Type
 */
class SetTypeConfigurationRequest extends Request
{
    /**
     * @param array{
     *     TypeArn?: string,
     *     Configuration: string,
     *     ConfigurationAlias?: string,
     *     TypeName?: string,
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
