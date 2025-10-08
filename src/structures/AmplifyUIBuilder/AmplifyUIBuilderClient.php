<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder;

class AmplifyUIBuilderClient extends \Aws\AmplifyUIBuilder\AmplifyUIBuilderClient
{
    use CreateComponent\CreateComponentTrait;
    use CreateForm\CreateFormTrait;
    use CreateTheme\CreateThemeTrait;
    use DeleteComponent\DeleteComponentTrait;
    use DeleteForm\DeleteFormTrait;
    use DeleteTheme\DeleteThemeTrait;
    use ExchangeCodeForToken\ExchangeCodeForTokenTrait;
    use ExportComponents\ExportComponentsTrait;
    use ExportForms\ExportFormsTrait;
    use ExportThemes\ExportThemesTrait;
    use GetCodegenJob\GetCodegenJobTrait;
    use GetComponent\GetComponentTrait;
    use GetForm\GetFormTrait;
    use GetMetadata\GetMetadataTrait;
    use GetTheme\GetThemeTrait;
    use ListCodegenJobs\ListCodegenJobsTrait;
    use ListComponents\ListComponentsTrait;
    use ListForms\ListFormsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListThemes\ListThemesTrait;
    use PutMetadataFlag\PutMetadataFlagTrait;
    use RefreshToken\RefreshTokenTrait;
    use StartCodegenJob\StartCodegenJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateComponent\UpdateComponentTrait;
    use UpdateForm\UpdateFormTrait;
    use UpdateTheme\UpdateThemeTrait;
}
