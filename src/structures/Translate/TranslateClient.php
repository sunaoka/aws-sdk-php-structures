<?php

namespace Sunaoka\Aws\Structures\Translate;

class TranslateClient extends \Aws\Translate\TranslateClient
{
    use CreateParallelData\CreateParallelDataTrait;
    use DeleteParallelData\DeleteParallelDataTrait;
    use DeleteTerminology\DeleteTerminologyTrait;
    use DescribeTextTranslationJob\DescribeTextTranslationJobTrait;
    use GetParallelData\GetParallelDataTrait;
    use GetTerminology\GetTerminologyTrait;
    use ImportTerminology\ImportTerminologyTrait;
    use ListLanguages\ListLanguagesTrait;
    use ListParallelData\ListParallelDataTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTerminologies\ListTerminologiesTrait;
    use ListTextTranslationJobs\ListTextTranslationJobsTrait;
    use StartTextTranslationJob\StartTextTranslationJobTrait;
    use StopTextTranslationJob\StopTextTranslationJobTrait;
    use TagResource\TagResourceTrait;
    use TranslateDocument\TranslateDocumentTrait;
    use TranslateText\TranslateTextTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateParallelData\UpdateParallelDataTrait;
}
