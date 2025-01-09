<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDryRunProgress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $DryRunId
 * @property bool $LoadDryRunConfig
 */
class DescribeDryRunProgressRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DryRunId?: string,
     *     LoadDryRunConfig?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
