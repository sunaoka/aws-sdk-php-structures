<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextInputCardInput|null $textInput
 * @property QQueryCardInput|null $qQuery
 * @property QPluginCardInput|null $qPlugin
 * @property FileUploadCardInput|null $fileUpload
 */
class CardInput extends Shape
{
    /**
     * @param array{
     *     textInput?: TextInputCardInput|null,
     *     qQuery?: QQueryCardInput|null,
     *     qPlugin?: QPluginCardInput|null,
     *     fileUpload?: FileUploadCardInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
