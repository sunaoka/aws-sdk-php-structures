<?php

namespace Sunaoka\Aws\Structures\Textract\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $ProjectName
 * @property string|null $ProjectDescription
 * @property Shapes\ExtractionConfiguration $ExtractionConfiguration
 * @property Shapes\GenerativeConfiguration|null $GenerativeConfiguration
 * @property Shapes\CustomConfiguration|null $CustomConfiguration
 * @property Shapes\SplitterConfiguration|null $SplitterConfiguration
 * @property Shapes\SensitiveDataConfiguration|null $SensitiveDataConfiguration
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property array<string, string>|null $Tags
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     ProjectName: string,
     *     ProjectDescription?: string|null,
     *     ExtractionConfiguration: Shapes\ExtractionConfiguration,
     *     GenerativeConfiguration?: Shapes\GenerativeConfiguration|null,
     *     CustomConfiguration?: Shapes\CustomConfiguration|null,
     *     SplitterConfiguration?: Shapes\SplitterConfiguration|null,
     *     SensitiveDataConfiguration?: Shapes\SensitiveDataConfiguration|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
