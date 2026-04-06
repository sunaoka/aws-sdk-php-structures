<?php

namespace Sunaoka\Aws\Structures\Ses\CreateReceiptRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Action|null $S3Action
 * @property BounceAction|null $BounceAction
 * @property WorkmailAction|null $WorkmailAction
 * @property LambdaAction|null $LambdaAction
 * @property StopAction|null $StopAction
 * @property AddHeaderAction|null $AddHeaderAction
 * @property SNSAction|null $SNSAction
 * @property ConnectAction|null $ConnectAction
 */
class ReceiptAction extends Shape
{
    /**
     * @param array{
     *     S3Action?: S3Action|null,
     *     BounceAction?: BounceAction|null,
     *     WorkmailAction?: WorkmailAction|null,
     *     LambdaAction?: LambdaAction|null,
     *     StopAction?: StopAction|null,
     *     AddHeaderAction?: AddHeaderAction|null,
     *     SNSAction?: SNSAction|null,
     *     ConnectAction?: ConnectAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
