<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpgradeElasticsearchDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $TargetVersion
 * @property bool $PerformCheckOnly
 */
class UpgradeElasticsearchDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     TargetVersion: string,
     *     PerformCheckOnly?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
