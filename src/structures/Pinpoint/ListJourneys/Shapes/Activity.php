<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListJourneys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomMessageActivity $CUSTOM
 * @property ConditionalSplitActivity $ConditionalSplit
 * @property string $Description
 * @property EmailMessageActivity $EMAIL
 * @property HoldoutActivity $Holdout
 * @property MultiConditionalSplitActivity $MultiCondition
 * @property PushMessageActivity $PUSH
 * @property RandomSplitActivity $RandomSplit
 * @property SMSMessageActivity $SMS
 * @property WaitActivity $Wait
 * @property ContactCenterActivity $ContactCenter
 */
class Activity extends Shape
{
    /**
     * @param array{
     *     CUSTOM?: CustomMessageActivity,
     *     ConditionalSplit?: ConditionalSplitActivity,
     *     Description?: string,
     *     EMAIL?: EmailMessageActivity,
     *     Holdout?: HoldoutActivity,
     *     MultiCondition?: MultiConditionalSplitActivity,
     *     PUSH?: PushMessageActivity,
     *     RandomSplit?: RandomSplitActivity,
     *     SMS?: SMSMessageActivity,
     *     Wait?: WaitActivity,
     *     ContactCenter?: ContactCenterActivity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
