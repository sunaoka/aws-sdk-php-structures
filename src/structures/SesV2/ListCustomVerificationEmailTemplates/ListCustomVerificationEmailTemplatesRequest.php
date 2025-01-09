<?php

namespace Sunaoka\Aws\Structures\SesV2\ListCustomVerificationEmailTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $PageSize
 */
class ListCustomVerificationEmailTemplatesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
