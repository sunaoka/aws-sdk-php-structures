<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCreateCaseOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $issueType
 * @property string $serviceCode
 * @property string $language
 * @property string $categoryCode
 * @property bool|null $dryRun
 */
class DescribeCreateCaseOptionsRequest extends Request
{
    /**
     * @param array{
     *     issueType: string,
     *     serviceCode: string,
     *     language: string,
     *     categoryCode: string,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
