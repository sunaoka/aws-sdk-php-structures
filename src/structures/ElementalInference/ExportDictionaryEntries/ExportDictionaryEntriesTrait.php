<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ExportDictionaryEntries;

trait ExportDictionaryEntriesTrait
{
    /**
     * @param ExportDictionaryEntriesRequest $args
     * @return ExportDictionaryEntriesResponse
     */
    public function exportDictionaryEntries(ExportDictionaryEntriesRequest $args)
    {
        $result = parent::exportDictionaryEntries($args->toArray());
        return new ExportDictionaryEntriesResponse($result->toArray());
    }
}
