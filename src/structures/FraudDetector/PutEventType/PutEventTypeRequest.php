<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutEventType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<string> $eventVariables
 * @property list<string> $labels
 * @property list<string> $entityTypes
 * @property 'ENABLED'|'DISABLED' $eventIngestion
 * @property list<Shapes\Tag> $tags
 * @property Shapes\EventOrchestration $eventOrchestration
 */
class PutEventTypeRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     eventVariables: list<string>,
     *     labels?: list<string>,
     *     entityTypes: list<string>,
     *     eventIngestion?: 'ENABLED'|'DISABLED',
     *     tags?: list<Shapes\Tag>,
     *     eventOrchestration?: Shapes\EventOrchestration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
