<?php

namespace Sunaoka\Aws\Structures\Textract\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectArn
 * @property string|null $ProjectDescription
 * @property Shapes\ExtractionConfiguration|null $ExtractionConfiguration
 * @property Shapes\GenerativeConfiguration|null $GenerativeConfiguration
 * @property Shapes\CustomConfiguration|null $CustomConfiguration
 * @property Shapes\SplitterConfiguration|null $SplitterConfiguration
 * @property Shapes\SensitiveDataConfiguration|null $SensitiveDataConfiguration
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     ProjectArn: string,
     *     ProjectDescription?: string|null,
     *     ExtractionConfiguration?: Shapes\ExtractionConfiguration|null,
     *     GenerativeConfiguration?: Shapes\GenerativeConfiguration|null,
     *     CustomConfiguration?: Shapes\CustomConfiguration|null,
     *     SplitterConfiguration?: Shapes\SplitterConfiguration|null,
     *     SensitiveDataConfiguration?: Shapes\SensitiveDataConfiguration|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
