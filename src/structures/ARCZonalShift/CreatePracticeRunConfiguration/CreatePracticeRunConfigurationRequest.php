<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\CreatePracticeRunConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceIdentifier
 * @property list<string>|null $blockedWindows
 * @property list<string>|null $blockedDates
 * @property list<Shapes\ControlCondition>|null $blockingAlarms
 * @property list<string>|null $allowedWindows
 * @property list<Shapes\ControlCondition> $outcomeAlarms
 */
class CreatePracticeRunConfigurationRequest extends Request
{
    /**
     * @param array{
     *     resourceIdentifier: string,
     *     blockedWindows?: list<string>|null,
     *     blockedDates?: list<string>|null,
     *     blockingAlarms?: list<Shapes\ControlCondition>|null,
     *     allowedWindows?: list<string>|null,
     *     outcomeAlarms: list<Shapes\ControlCondition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
