<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DescribePage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PageId
 */
class DescribePageRequest extends Request
{
    /**
     * @param array{PageId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
