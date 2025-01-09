<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Author
 * @property string $Description
 * @property string $HomePageUrl
 * @property list<string> $Labels
 * @property string $LicenseBody
 * @property string $LicenseUrl
 * @property string $Name
 * @property string $ReadmeBody
 * @property string $ReadmeUrl
 * @property string $SemanticVersion
 * @property string $SourceCodeArchiveUrl
 * @property string $SourceCodeUrl
 * @property string $SpdxLicenseId
 * @property string $TemplateBody
 * @property string $TemplateUrl
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     Author: string,
     *     Description: string,
     *     HomePageUrl?: string,
     *     Labels?: list<string>,
     *     LicenseBody?: string,
     *     LicenseUrl?: string,
     *     Name: string,
     *     ReadmeBody?: string,
     *     ReadmeUrl?: string,
     *     SemanticVersion?: string,
     *     SourceCodeArchiveUrl?: string,
     *     SourceCodeUrl?: string,
     *     SpdxLicenseId?: string,
     *     TemplateBody?: string,
     *     TemplateUrl?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
