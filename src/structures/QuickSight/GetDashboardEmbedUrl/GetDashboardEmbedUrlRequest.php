<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetDashboardEmbedUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property 'IAM'|'QUICKSIGHT'|'ANONYMOUS' $IdentityType
 * @property int<15, 600>|null $SessionLifetimeInMinutes
 * @property bool|null $UndoRedoDisabled
 * @property bool|null $ResetDisabled
 * @property bool|null $StatePersistenceEnabled
 * @property string|null $UserArn
 * @property string|null $Namespace
 * @property list<string>|null $AdditionalDashboardIds
 */
class GetDashboardEmbedUrlRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     IdentityType: 'IAM'|'QUICKSIGHT'|'ANONYMOUS',
     *     SessionLifetimeInMinutes?: int<15, 600>|null,
     *     UndoRedoDisabled?: bool|null,
     *     ResetDisabled?: bool|null,
     *     StatePersistenceEnabled?: bool|null,
     *     UserArn?: string|null,
     *     Namespace?: string|null,
     *     AdditionalDashboardIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
