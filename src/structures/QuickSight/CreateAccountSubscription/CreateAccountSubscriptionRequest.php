<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccountSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'STANDARD'|'ENTERPRISE'|'ENTERPRISE_AND_Q' $Edition
 * @property 'IAM_AND_QUICKSIGHT'|'IAM_ONLY'|'ACTIVE_DIRECTORY'|'IAM_IDENTITY_CENTER' $AuthenticationMethod
 * @property string $AwsAccountId
 * @property string $AccountName
 * @property string $NotificationEmail
 * @property string $ActiveDirectoryName
 * @property string $Realm
 * @property string $DirectoryId
 * @property list<string> $AdminGroup
 * @property list<string> $AuthorGroup
 * @property list<string> $ReaderGroup
 * @property list<string> $AdminProGroup
 * @property list<string> $AuthorProGroup
 * @property list<string> $ReaderProGroup
 * @property string $FirstName
 * @property string $LastName
 * @property string $EmailAddress
 * @property string $ContactNumber
 * @property string $IAMIdentityCenterInstanceArn
 */
class CreateAccountSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     Edition?: 'STANDARD'|'ENTERPRISE'|'ENTERPRISE_AND_Q',
     *     AuthenticationMethod: 'IAM_AND_QUICKSIGHT'|'IAM_ONLY'|'ACTIVE_DIRECTORY'|'IAM_IDENTITY_CENTER',
     *     AwsAccountId: string,
     *     AccountName: string,
     *     NotificationEmail: string,
     *     ActiveDirectoryName?: string,
     *     Realm?: string,
     *     DirectoryId?: string,
     *     AdminGroup?: list<string>,
     *     AuthorGroup?: list<string>,
     *     ReaderGroup?: list<string>,
     *     AdminProGroup?: list<string>,
     *     AuthorProGroup?: list<string>,
     *     ReaderProGroup?: list<string>,
     *     FirstName?: string,
     *     LastName?: string,
     *     EmailAddress?: string,
     *     ContactNumber?: string,
     *     IAMIdentityCenterInstanceArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
