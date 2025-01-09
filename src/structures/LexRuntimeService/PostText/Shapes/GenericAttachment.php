<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $subTitle
 * @property string $attachmentLinkUrl
 * @property string $imageUrl
 * @property list<Button> $buttons
 */
class GenericAttachment extends Shape
{
    /**
     * @param array{
     *     title?: string,
     *     subTitle?: string,
     *     attachmentLinkUrl?: string,
     *     imageUrl?: string,
     *     buttons?: list<Button>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
