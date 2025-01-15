<?php

namespace Sunaoka\Aws\Structures\WAFV2\PutManagedRuleSetVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $Id
 * @property string $LockToken
 * @property string|null $RecommendedVersion
 * @property array<string, Shapes\VersionToPublish>|null $VersionsToPublish
 */
class PutManagedRuleSetVersionsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Id: string,
     *     LockToken: string,
     *     RecommendedVersion?: string|null,
     *     VersionsToPublish?: array<string, Shapes\VersionToPublish>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
