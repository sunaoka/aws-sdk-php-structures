<?php

namespace Sunaoka\Aws\Structures\SesV2\ListEmailIdentityCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 * @property string|null $NextToken
 * @property int|null $PageSize
 */
class ListEmailIdentityCertificatesRequest extends Request
{
    /**
     * @param array{
     *     EmailIdentity: string,
     *     NextToken?: string|null,
     *     PageSize?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
