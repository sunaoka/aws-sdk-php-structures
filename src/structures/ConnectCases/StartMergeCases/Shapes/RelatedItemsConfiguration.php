<?php

namespace Sunaoka\Aws\Structures\ConnectCases\StartMergeCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $comment
 * @property bool|null $connectCase
 * @property bool|null $contact
 * @property bool|null $custom
 */
class RelatedItemsConfiguration extends Shape
{
    /**
     * @param array{
     *     comment?: bool|null,
     *     connectCase?: bool|null,
     *     contact?: bool|null,
     *     custom?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
