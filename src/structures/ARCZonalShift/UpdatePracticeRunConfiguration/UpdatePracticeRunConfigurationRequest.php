<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\UpdatePracticeRunConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $blockedDates
 * @property list<string> $blockedWindows
 * @property list<Shapes\ControlCondition> $blockingAlarms
 * @property list<Shapes\ControlCondition> $outcomeAlarms
 * @property string $resourceIdentifier
 */
class UpdatePracticeRunConfigurationRequest extends Request
{
    /**
     * @param array{
     *     blockedDates?: list<string>,
     *     blockedWindows?: list<string>,
     *     blockingAlarms?: list<Shapes\ControlCondition>,
     *     outcomeAlarms?: list<Shapes\ControlCondition>,
     *     resourceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
