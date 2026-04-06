<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\CreatePracticeRunConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $blockedDates
 * @property list<string>|null $blockedWindows
 * @property list<Shapes\ControlCondition>|null $blockingAlarms
 * @property list<Shapes\ControlCondition> $outcomeAlarms
 * @property string $resourceIdentifier
 */
class CreatePracticeRunConfigurationRequest extends Request
{
    /**
     * @param array{
     *     blockedDates?: list<string>|null,
     *     blockedWindows?: list<string>|null,
     *     blockingAlarms?: list<Shapes\ControlCondition>|null,
     *     outcomeAlarms: list<Shapes\ControlCondition>,
     *     resourceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
