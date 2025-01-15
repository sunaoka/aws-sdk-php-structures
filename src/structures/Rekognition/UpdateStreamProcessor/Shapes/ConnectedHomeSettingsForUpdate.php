<?php

namespace Sunaoka\Aws\Structures\Rekognition\UpdateStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Labels
 * @property float|null $MinConfidence
 */
class ConnectedHomeSettingsForUpdate extends Shape
{
    /**
     * @param array{
     *     Labels?: list<string>|null,
     *     MinConfidence?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
