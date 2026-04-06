<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SearchAddressBooks;

trait SearchAddressBooksTrait
{
    /**
     * @param SearchAddressBooksRequest $args
     * @return SearchAddressBooksResponse
     */
    public function searchAddressBooks(SearchAddressBooksRequest $args)
    {
        $result = parent::searchAddressBooks($args->toArray());
        return new SearchAddressBooksResponse($result->toArray());
    }
}
