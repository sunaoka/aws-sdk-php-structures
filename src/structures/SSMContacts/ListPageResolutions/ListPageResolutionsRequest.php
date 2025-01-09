<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPageResolutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property string $PageId
 */
class ListPageResolutionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     PageId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
