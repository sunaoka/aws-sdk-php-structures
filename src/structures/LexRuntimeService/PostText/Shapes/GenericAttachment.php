<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $title
 * @property string|null $subTitle
 * @property string|null $attachmentLinkUrl
 * @property string|null $imageUrl
 * @property list<Button>|null $buttons
 */
class GenericAttachment extends Shape
{
    /**
     * @param array{
     *     title?: string|null,
     *     subTitle?: string|null,
     *     attachmentLinkUrl?: string|null,
     *     imageUrl?: string|null,
     *     buttons?: list<Button>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
