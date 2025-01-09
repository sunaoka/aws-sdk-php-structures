<?php

namespace Sunaoka\Aws\Structures\QConnect\GetQuickResponse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QuickResponseContentProvider $markdown
 * @property QuickResponseContentProvider $plainText
 */
class QuickResponseContents extends Shape
{
    /**
     * @param array{
     *     markdown?: QuickResponseContentProvider,
     *     plainText?: QuickResponseContentProvider
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
