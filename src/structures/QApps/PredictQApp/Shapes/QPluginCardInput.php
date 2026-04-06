<?php

namespace Sunaoka\Aws\Structures\QApps\PredictQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $id
 * @property 'text-input'|'q-query'|'file-upload'|'q-plugin' $type
 * @property string $prompt
 * @property string $pluginId
 */
class QPluginCardInput extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     id: string,
     *     type: 'text-input'|'q-query'|'file-upload'|'q-plugin',
     *     prompt: string,
     *     pluginId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
