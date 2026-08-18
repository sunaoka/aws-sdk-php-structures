<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $AssessmentIdentifier
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeAssessmentRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     AssessmentIdentifier: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
