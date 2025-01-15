<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleArn
 * @property string $RoleSessionName
 * @property list<Shapes\PolicyDescriptorType>|null $PolicyArns
 * @property string|null $Policy
 * @property int<900, 43200>|null $DurationSeconds
 * @property list<Shapes\Tag>|null $Tags
 * @property list<string>|null $TransitiveTagKeys
 * @property string|null $ExternalId
 * @property string|null $SerialNumber
 * @property string|null $TokenCode
 * @property string|null $SourceIdentity
 * @property list<Shapes\ProvidedContext>|null $ProvidedContexts
 */
class AssumeRoleRequest extends Request
{
    /**
     * @param array{
     *     RoleArn: string,
     *     RoleSessionName: string,
     *     PolicyArns?: list<Shapes\PolicyDescriptorType>|null,
     *     Policy?: string|null,
     *     DurationSeconds?: int<900, 43200>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     TransitiveTagKeys?: list<string>|null,
     *     ExternalId?: string|null,
     *     SerialNumber?: string|null,
     *     TokenCode?: string|null,
     *     SourceIdentity?: string|null,
     *     ProvidedContexts?: list<Shapes\ProvidedContext>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
