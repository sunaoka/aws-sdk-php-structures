<?php

namespace Sunaoka\Aws\Structures\QApps\GetQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextInputCard|null $textInput
 * @property QQueryCard|null $qQuery
 * @property QPluginCard|null $qPlugin
 * @property FileUploadCard|null $fileUpload
 * @property FormInputCard|null $formInput
 */
class Card extends Shape
{
    /**
     * @param array{
     *     textInput?: TextInputCard|null,
     *     qQuery?: QQueryCard|null,
     *     qPlugin?: QPluginCard|null,
     *     fileUpload?: FileUploadCard|null,
     *     formInput?: FormInputCard|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
