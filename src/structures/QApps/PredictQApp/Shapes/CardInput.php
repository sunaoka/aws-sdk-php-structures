<?php

namespace Sunaoka\Aws\Structures\QApps\PredictQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TextInputCardInput $textInput
 * @property QQueryCardInput $qQuery
 * @property QPluginCardInput $qPlugin
 * @property FileUploadCardInput $fileUpload
 * @property FormInputCardInput $formInput
 */
class CardInput extends Shape
{
    /**
     * @param array{
     *     textInput?: TextInputCardInput,
     *     qQuery?: QQueryCardInput,
     *     qPlugin?: QPluginCardInput,
     *     fileUpload?: FileUploadCardInput,
     *     formInput?: FormInputCardInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
