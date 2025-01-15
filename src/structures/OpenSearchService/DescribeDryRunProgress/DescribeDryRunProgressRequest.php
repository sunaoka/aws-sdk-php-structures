<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDryRunProgress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string|null $DryRunId
 * @property bool|null $LoadDryRunConfig
 */
class DescribeDryRunProgressRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DryRunId?: string|null,
     *     LoadDryRunConfig?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
