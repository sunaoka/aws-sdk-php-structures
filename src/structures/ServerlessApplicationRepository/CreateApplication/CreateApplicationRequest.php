<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Author
 * @property string $Description
 * @property string|null $HomePageUrl
 * @property list<string>|null $Labels
 * @property string|null $LicenseBody
 * @property string|null $LicenseUrl
 * @property string $Name
 * @property string|null $ReadmeBody
 * @property string|null $ReadmeUrl
 * @property string|null $SemanticVersion
 * @property string|null $SourceCodeArchiveUrl
 * @property string|null $SourceCodeUrl
 * @property string|null $SpdxLicenseId
 * @property string|null $TemplateBody
 * @property string|null $TemplateUrl
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     Author: string,
     *     Description: string,
     *     HomePageUrl?: string|null,
     *     Labels?: list<string>|null,
     *     LicenseBody?: string|null,
     *     LicenseUrl?: string|null,
     *     Name: string,
     *     ReadmeBody?: string|null,
     *     ReadmeUrl?: string|null,
     *     SemanticVersion?: string|null,
     *     SourceCodeArchiveUrl?: string|null,
     *     SourceCodeUrl?: string|null,
     *     SpdxLicenseId?: string|null,
     *     TemplateBody?: string|null,
     *     TemplateUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
