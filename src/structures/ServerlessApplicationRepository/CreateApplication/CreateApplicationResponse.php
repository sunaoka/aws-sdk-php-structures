<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\CreateApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationId
 * @property string $Author
 * @property string $CreationTime
 * @property string $Description
 * @property string $HomePageUrl
 * @property bool $IsVerifiedAuthor
 * @property list<string> $Labels
 * @property string $LicenseUrl
 * @property string $Name
 * @property string $ReadmeUrl
 * @property string $SpdxLicenseId
 * @property string $VerifiedAuthorUrl
 * @property Shapes\Version $Version
 */
class CreateApplicationResponse extends Response
{
}
