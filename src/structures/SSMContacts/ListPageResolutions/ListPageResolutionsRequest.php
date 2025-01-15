<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPageResolutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property string $PageId
 */
class ListPageResolutionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     PageId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
