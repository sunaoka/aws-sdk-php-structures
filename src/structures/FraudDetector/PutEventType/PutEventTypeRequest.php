<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutEventType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<string> $eventVariables
 * @property list<string>|null $labels
 * @property list<string> $entityTypes
 * @property 'ENABLED'|'DISABLED'|null $eventIngestion
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\EventOrchestration|null $eventOrchestration
 */
class PutEventTypeRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     eventVariables: list<string>,
     *     labels?: list<string>|null,
     *     entityTypes: list<string>,
     *     eventIngestion?: 'ENABLED'|'DISABLED'|null,
     *     tags?: list<Shapes\Tag>|null,
     *     eventOrchestration?: Shapes\EventOrchestration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
