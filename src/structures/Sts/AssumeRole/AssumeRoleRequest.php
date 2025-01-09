<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleArn
 * @property string $RoleSessionName
 * @property list<Shapes\PolicyDescriptorType> $PolicyArns
 * @property string $Policy
 * @property int $DurationSeconds
 * @property list<Shapes\Tag> $Tags
 * @property list<string> $TransitiveTagKeys
 * @property string $ExternalId
 * @property string $SerialNumber
 * @property string $TokenCode
 * @property string $SourceIdentity
 * @property list<Shapes\ProvidedContext> $ProvidedContexts
 */
class AssumeRoleRequest extends Request
{
    /**
     * @param array{
     *     RoleArn: string,
     *     RoleSessionName: string,
     *     PolicyArns?: list<Shapes\PolicyDescriptorType>,
     *     Policy?: string,
     *     DurationSeconds?: int,
     *     Tags?: list<Shapes\Tag>,
     *     TransitiveTagKeys?: list<string>,
     *     ExternalId?: string,
     *     SerialNumber?: string,
     *     TokenCode?: string,
     *     SourceIdentity?: string,
     *     ProvidedContexts?: list<Shapes\ProvidedContext>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
