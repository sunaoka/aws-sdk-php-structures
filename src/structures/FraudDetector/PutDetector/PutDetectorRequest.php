<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 * @property string|null $description
 * @property string $eventTypeName
 * @property list<Shapes\Tag>|null $tags
 */
class PutDetectorRequest extends Request
{
    /**
     * @param array{
     *     detectorId: string,
     *     description?: string|null,
     *     eventTypeName: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
