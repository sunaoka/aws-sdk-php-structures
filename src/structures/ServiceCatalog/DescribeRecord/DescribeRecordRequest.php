<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $Id
 * @property string|null $PageToken
 * @property int<0, 20>|null $PageSize
 */
class DescribeRecordRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     Id: string,
     *     PageToken?: string|null,
     *     PageSize?: int<0, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
