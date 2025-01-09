<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpgradeDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $TargetVersion
 * @property bool $PerformCheckOnly
 * @property array<string, string> $AdvancedOptions
 */
class UpgradeDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     TargetVersion: string,
     *     PerformCheckOnly?: bool,
     *     AdvancedOptions?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
