<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift;

class ARCZonalShiftClient extends \Aws\ARCZonalShift\ARCZonalShiftClient
{
    use CancelPracticeRun\CancelPracticeRunTrait;
    use CancelZonalShift\CancelZonalShiftTrait;
    use CreatePracticeRunConfiguration\CreatePracticeRunConfigurationTrait;
    use DeletePracticeRunConfiguration\DeletePracticeRunConfigurationTrait;
    use GetAutoshiftObserverNotificationStatus\GetAutoshiftObserverNotificationStatusTrait;
    use GetManagedResource\GetManagedResourceTrait;
    use ListAutoshifts\ListAutoshiftsTrait;
    use ListManagedResources\ListManagedResourcesTrait;
    use ListZonalShifts\ListZonalShiftsTrait;
    use StartPracticeRun\StartPracticeRunTrait;
    use StartZonalShift\StartZonalShiftTrait;
    use UpdateAutoshiftObserverNotificationStatus\UpdateAutoshiftObserverNotificationStatusTrait;
    use UpdatePracticeRunConfiguration\UpdatePracticeRunConfigurationTrait;
    use UpdateZonalAutoshiftConfiguration\UpdateZonalAutoshiftConfigurationTrait;
    use UpdateZonalShift\UpdateZonalShiftTrait;
}
