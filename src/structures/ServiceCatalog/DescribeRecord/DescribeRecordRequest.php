<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $Id
 * @property string $PageToken
 * @property int<0, 20> $PageSize
 */
class DescribeRecordRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     Id: string,
     *     PageToken?: string,
     *     PageSize?: int<0, 20>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
