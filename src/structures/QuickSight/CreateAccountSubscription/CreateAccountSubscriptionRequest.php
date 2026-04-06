<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccountSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'STANDARD'|'ENTERPRISE'|'ENTERPRISE_AND_Q' $Edition
 * @property 'IAM_AND_QUICKSIGHT'|'IAM_ONLY'|'ACTIVE_DIRECTORY'|'IAM_IDENTITY_CENTER' $AuthenticationMethod
 * @property string $AwsAccountId
 * @property string $AccountName
 * @property string $NotificationEmail
 * @property string|null $ActiveDirectoryName
 * @property string|null $Realm
 * @property string|null $DirectoryId
 * @property list<string>|null $AdminGroup
 * @property list<string>|null $AuthorGroup
 * @property list<string>|null $ReaderGroup
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property string|null $EmailAddress
 * @property string|null $ContactNumber
 */
class CreateAccountSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     Edition: 'STANDARD'|'ENTERPRISE'|'ENTERPRISE_AND_Q',
     *     AuthenticationMethod: 'IAM_AND_QUICKSIGHT'|'IAM_ONLY'|'ACTIVE_DIRECTORY'|'IAM_IDENTITY_CENTER',
     *     AwsAccountId: string,
     *     AccountName: string,
     *     NotificationEmail: string,
     *     ActiveDirectoryName?: string|null,
     *     Realm?: string|null,
     *     DirectoryId?: string|null,
     *     AdminGroup?: list<string>|null,
     *     AuthorGroup?: list<string>|null,
     *     ReaderGroup?: list<string>|null,
     *     FirstName?: string|null,
     *     LastName?: string|null,
     *     EmailAddress?: string|null,
     *     ContactNumber?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
