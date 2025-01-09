<?php

namespace Sunaoka\Aws\Structures\QApps\GetQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextInputCard $textInput
 * @property QQueryCard $qQuery
 * @property QPluginCard $qPlugin
 * @property FileUploadCard $fileUpload
 * @property FormInputCard $formInput
 */
class Card extends Shape
{
    /**
     * @param array{
     *     textInput?: TextInputCard,
     *     qQuery?: QQueryCard,
     *     qPlugin?: QPluginCard,
     *     fileUpload?: FileUploadCard,
     *     formInput?: FormInputCard
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
