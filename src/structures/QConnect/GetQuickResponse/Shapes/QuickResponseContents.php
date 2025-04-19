<?php

namespace Sunaoka\Aws\Structures\QConnect\GetQuickResponse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QuickResponseContentProvider|null $plainText
 * @property QuickResponseContentProvider|null $markdown
 */
class QuickResponseContents extends Shape
{
    /**
     * @param array{
     *     plainText?: QuickResponseContentProvider|null,
     *     markdown?: QuickResponseContentProvider|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
