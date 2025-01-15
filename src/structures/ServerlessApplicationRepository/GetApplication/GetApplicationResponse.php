<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\GetApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationId
 * @property string|null $Author
 * @property string|null $CreationTime
 * @property string|null $Description
 * @property string|null $HomePageUrl
 * @property bool|null $IsVerifiedAuthor
 * @property list<string>|null $Labels
 * @property string|null $LicenseUrl
 * @property string|null $Name
 * @property string|null $ReadmeUrl
 * @property string|null $SpdxLicenseId
 * @property string|null $VerifiedAuthorUrl
 * @property Shapes\Version|null $Version
 */
class GetApplicationResponse extends Response
{
}
