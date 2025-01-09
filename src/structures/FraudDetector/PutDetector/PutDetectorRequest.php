<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 * @property string $description
 * @property string $eventTypeName
 * @property list<Shapes\Tag> $tags
 */
class PutDetectorRequest extends Request
{
    /**
     * @param array{
     *     detectorId: string,
     *     description?: string,
     *     eventTypeName: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
