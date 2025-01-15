<?php

namespace Sunaoka\Aws\Structures\CloudFormation\SetTypeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TypeArn
 * @property string $Configuration
 * @property string|null $ConfigurationAlias
 * @property string|null $TypeName
 * @property 'RESOURCE'|'MODULE'|'HOOK'|null $Type
 */
class SetTypeConfigurationRequest extends Request
{
    /**
     * @param array{
     *     TypeArn?: string|null,
     *     Configuration: string,
     *     ConfigurationAlias?: string|null,
     *     TypeName?: string|null,
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
