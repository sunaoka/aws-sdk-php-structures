<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomMessageActivity|null $CUSTOM
 * @property ConditionalSplitActivity|null $ConditionalSplit
 * @property string|null $Description
 * @property EmailMessageActivity|null $EMAIL
 * @property HoldoutActivity|null $Holdout
 * @property MultiConditionalSplitActivity|null $MultiCondition
 * @property PushMessageActivity|null $PUSH
 * @property RandomSplitActivity|null $RandomSplit
 * @property SMSMessageActivity|null $SMS
 * @property WaitActivity|null $Wait
 * @property ContactCenterActivity|null $ContactCenter
 */
class Activity extends Shape
{
    /**
     * @param array{
     *     CUSTOM?: CustomMessageActivity|null,
     *     ConditionalSplit?: ConditionalSplitActivity|null,
     *     Description?: string|null,
     *     EMAIL?: EmailMessageActivity|null,
     *     Holdout?: HoldoutActivity|null,
     *     MultiCondition?: MultiConditionalSplitActivity|null,
     *     PUSH?: PushMessageActivity|null,
     *     RandomSplit?: RandomSplitActivity|null,
     *     SMS?: SMSMessageActivity|null,
     *     Wait?: WaitActivity|null,
     *     ContactCenter?: ContactCenterActivity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
