<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift;

class ARCZonalShiftClient extends \Aws\ARCZonalShift\ARCZonalShiftClient
{
    use CancelZonalShift\CancelZonalShiftTrait;
    use GetManagedResource\GetManagedResourceTrait;
    use ListManagedResources\ListManagedResourcesTrait;
    use ListZonalShifts\ListZonalShiftsTrait;
    use StartZonalShift\StartZonalShiftTrait;
    use UpdateZonalShift\UpdateZonalShiftTrait;
}
