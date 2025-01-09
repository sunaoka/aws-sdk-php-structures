<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetDashboardEmbedUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property 'IAM'|'QUICKSIGHT'|'ANONYMOUS' $IdentityType
 * @property int<15, 600> $SessionLifetimeInMinutes
 * @property bool $UndoRedoDisabled
 * @property bool $ResetDisabled
 * @property bool $StatePersistenceEnabled
 * @property string $UserArn
 * @property string $Namespace
 * @property list<string> $AdditionalDashboardIds
 */
class GetDashboardEmbedUrlRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     IdentityType: 'IAM'|'QUICKSIGHT'|'ANONYMOUS',
     *     SessionLifetimeInMinutes?: int<15, 600>,
     *     UndoRedoDisabled?: bool,
     *     ResetDisabled?: bool,
     *     StatePersistenceEnabled?: bool,
     *     UserArn?: string,
     *     Namespace?: string,
     *     AdditionalDashboardIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
