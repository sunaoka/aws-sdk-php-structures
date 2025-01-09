<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeReceiptRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Action $S3Action
 * @property BounceAction $BounceAction
 * @property WorkmailAction $WorkmailAction
 * @property LambdaAction $LambdaAction
 * @property StopAction $StopAction
 * @property AddHeaderAction $AddHeaderAction
 * @property SNSAction $SNSAction
 * @property ConnectAction $ConnectAction
 */
class ReceiptAction extends Shape
{
    /**
     * @param array{
     *     S3Action?: S3Action,
     *     BounceAction?: BounceAction,
     *     WorkmailAction?: WorkmailAction,
     *     LambdaAction?: LambdaAction,
     *     StopAction?: StopAction,
     *     AddHeaderAction?: AddHeaderAction,
     *     SNSAction?: SNSAction,
     *     ConnectAction?: ConnectAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
