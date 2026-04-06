<?php

namespace Sunaoka\Aws\Structures\SSMGuiConnect\UpdateConnectionRecordingPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KMSKeyArn
 * @property RecordingDestinations $RecordingDestinations
 */
class ConnectionRecordingPreferences extends Shape
{
    /**
     * @param array{
     *     KMSKeyArn: string,
     *     RecordingDestinations: RecordingDestinations
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
