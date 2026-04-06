<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\CreateQuickResponse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QuickResponseContentProvider|null $markdown
 * @property QuickResponseContentProvider|null $plainText
 */
class QuickResponseContents extends Shape
{
    /**
     * @param array{
     *     markdown?: QuickResponseContentProvider|null,
     *     plainText?: QuickResponseContentProvider|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
